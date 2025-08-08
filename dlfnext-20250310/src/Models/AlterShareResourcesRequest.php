<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class AlterShareResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var ShareResource[]
     */
    public $shareResourceList;
    protected $_name = [
        'catalogId' => 'catalogId',
        'shareResourceList' => 'shareResourceList',
    ];

    public function validate()
    {
        if (\is_array($this->shareResourceList)) {
            Model::validateArray($this->shareResourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->shareResourceList) {
            if (\is_array($this->shareResourceList)) {
                $res['shareResourceList'] = [];
                $n1 = 0;
                foreach ($this->shareResourceList as $item1) {
                    $res['shareResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['shareResourceList'])) {
            if (!empty($map['shareResourceList'])) {
                $model->shareResourceList = [];
                $n1 = 0;
                foreach ($map['shareResourceList'] as $item1) {
                    $model->shareResourceList[$n1] = ShareResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
