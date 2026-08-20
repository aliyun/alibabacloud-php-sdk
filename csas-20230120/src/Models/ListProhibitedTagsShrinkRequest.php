<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedTagsShrinkRequest\tagIds;

class ListProhibitedTagsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $softwareIdShrink;

    /**
     * @var tagIds[]
     */
    public $tagIds;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'policyId' => 'PolicyId',
        'softwareIdShrink' => 'SoftwareId',
        'tagIds' => 'TagIds',
    ];

    public function validate()
    {
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->softwareIdShrink) {
            $res['SoftwareId'] = $this->softwareIdShrink;
        }

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareIdShrink = $map['SoftwareId'];
        }

        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = tagIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
