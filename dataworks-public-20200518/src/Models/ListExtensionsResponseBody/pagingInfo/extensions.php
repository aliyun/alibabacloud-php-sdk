<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo\extensions\bindEventList;
use AlibabaCloud\Tea\Model;

class extensions extends Model
{
    /**
     * @description The name of the event.
     *
     * @var bindEventList[]
     */
    public $bindEventList;

    /**
     * @description The extension point events.
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description The name of the extension.
     *
     * @var string
     */
    public $extensionDesc;

    /**
     * @description The ID of the RAM user.
     *
     * @var string
     */
    public $extensionName;

    /**
     * @description The unique code of the extension.
     *
     * @example 2003****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The description of the extension.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'bindEventList' => 'BindEventList',
        'extensionCode' => 'ExtensionCode',
        'extensionDesc' => 'ExtensionDesc',
        'extensionName' => 'ExtensionName',
        'owner'         => 'Owner',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindEventList) {
            $res['BindEventList'] = [];
            if (null !== $this->bindEventList && \is_array($this->bindEventList)) {
                $n = 0;
                foreach ($this->bindEventList as $item) {
                    $res['BindEventList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return extensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindEventList'])) {
            if (!empty($map['BindEventList'])) {
                $model->bindEventList = [];
                $n                    = 0;
                foreach ($map['BindEventList'] as $item) {
                    $model->bindEventList[$n++] = null !== $item ? bindEventList::fromMap($item) : $item;
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
