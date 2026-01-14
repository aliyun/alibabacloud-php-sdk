<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody\aclEntries;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody\relatedListeners;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody\tags;

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

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aclEntries' => 'AclEntries',
        'aclId' => 'AclId',
        'aclName' => 'AclName',
        'aclStatus' => 'AclStatus',
        'addressIPVersion' => 'AddressIPVersion',
        'relatedListeners' => 'RelatedListeners',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->aclEntries)) {
            Model::validateArray($this->aclEntries);
        }
        if (\is_array($this->relatedListeners)) {
            Model::validateArray($this->relatedListeners);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclEntries) {
            if (\is_array($this->aclEntries)) {
                $res['AclEntries'] = [];
                $n1 = 0;
                foreach ($this->aclEntries as $item1) {
                    $res['AclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->relatedListeners)) {
                $res['RelatedListeners'] = [];
                $n1 = 0;
                foreach ($this->relatedListeners as $item1) {
                    $res['RelatedListeners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n1 = 0;
                foreach ($map['AclEntries'] as $item1) {
                    $model->aclEntries[$n1] = aclEntries::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['RelatedListeners'] as $item1) {
                    $model->relatedListeners[$n1] = relatedListeners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
