<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ListWebFilterTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $webFilterTemplateIds;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'webFilterTemplateIds' => 'WebFilterTemplateIds',
    ];

    public function validate()
    {
        if (\is_array($this->webFilterTemplateIds)) {
            Model::validateArray($this->webFilterTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->webFilterTemplateIds) {
            if (\is_array($this->webFilterTemplateIds)) {
                $res['WebFilterTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->webFilterTemplateIds as $item1) {
                    $res['WebFilterTemplateIds'][$n1] = $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WebFilterTemplateIds'])) {
            if (!empty($map['WebFilterTemplateIds'])) {
                $model->webFilterTemplateIds = [];
                $n1 = 0;
                foreach ($map['WebFilterTemplateIds'] as $item1) {
                    $model->webFilterTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
