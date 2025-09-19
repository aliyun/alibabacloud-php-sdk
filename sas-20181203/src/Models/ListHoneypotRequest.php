<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListHoneypotRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $honeypotIds;

    /**
     * @var string
     */
    public $honeypotName;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'honeypotIds' => 'HoneypotIds',
        'honeypotName' => 'HoneypotName',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->honeypotIds)) {
            Model::validateArray($this->honeypotIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->honeypotIds) {
            if (\is_array($this->honeypotIds)) {
                $res['HoneypotIds'] = [];
                $n1 = 0;
                foreach ($this->honeypotIds as $item1) {
                    $res['HoneypotIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['HoneypotIds'])) {
            if (!empty($map['HoneypotIds'])) {
                $model->honeypotIds = [];
                $n1 = 0;
                foreach ($map['HoneypotIds'] as $item1) {
                    $model->honeypotIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
