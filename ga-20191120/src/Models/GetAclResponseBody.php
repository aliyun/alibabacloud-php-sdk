<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody\aclEntries;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody\relatedListeners;
use AlibabaCloud\Tea\Model;

class GetAclResponseBody extends Model
{
    /**
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclName;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var relatedListeners[]
     */
    public $relatedListeners;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclEntries'       => 'AclEntries',
        'aclId'            => 'AclId',
        'aclName'          => 'AclName',
        'aclStatus'        => 'AclStatus',
        'addressIPVersion' => 'AddressIPVersion',
        'relatedListeners' => 'RelatedListeners',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntries) {
            $res['AclEntries'] = [];
            if (null !== $this->aclEntries && \is_array($this->aclEntries)) {
                $n = 0;
                foreach ($this->aclEntries as $item) {
                    $res['AclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = [];
            if (null !== $this->relatedListeners && \is_array($this->relatedListeners)) {
                $n = 0;
                foreach ($this->relatedListeners as $item) {
                    $res['RelatedListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAclResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n                 = 0;
                foreach ($map['AclEntries'] as $item) {
                    $model->aclEntries[$n++] = null !== $item ? aclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n                       = 0;
                foreach ($map['RelatedListeners'] as $item) {
                    $model->relatedListeners[$n++] = null !== $item ? relatedListeners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
