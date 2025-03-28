<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo\extensions\bindEventList;

class extensions extends Model
{
    /**
     * @var bindEventList[]
     */
    public $bindEventList;

    /**
     * @var string
     */
    public $extensionCode;

    /**
     * @var string
     */
    public $extensionDesc;

    /**
     * @var string
     */
    public $extensionName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'bindEventList' => 'BindEventList',
        'extensionCode' => 'ExtensionCode',
        'extensionDesc' => 'ExtensionDesc',
        'extensionName' => 'ExtensionName',
        'owner' => 'Owner',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->bindEventList)) {
            Model::validateArray($this->bindEventList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindEventList) {
            if (\is_array($this->bindEventList)) {
                $res['BindEventList'] = [];
                $n1 = 0;
                foreach ($this->bindEventList as $item1) {
                    $res['BindEventList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }

        if (null !== $this->extensionDesc) {
            $res['ExtensionDesc'] = $this->extensionDesc;
        }

        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BindEventList'])) {
            if (!empty($map['BindEventList'])) {
                $model->bindEventList = [];
                $n1 = 0;
                foreach ($map['BindEventList'] as $item1) {
                    $model->bindEventList[$n1++] = bindEventList::fromMap($item1);
                }
            }
        }

        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }

        if (isset($map['ExtensionDesc'])) {
            $model->extensionDesc = $map['ExtensionDesc'];
        }

        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
