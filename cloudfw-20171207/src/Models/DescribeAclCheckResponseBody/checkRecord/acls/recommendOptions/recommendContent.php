<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\recommendOptions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\recommendOptions\recommendContent\addresses;

class recommendContent extends Model
{
    /**
     * @var string
     */
    public $aclAction;

    /**
     * @var addresses[]
     */
    public $addresses;

    /**
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destPort;

    /**
     * @var string
     */
    public $destPortGroup;

    /**
     * @var string
     */
    public $destPortType;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $release;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aclAction' => 'AclAction',
        'addresses' => 'Addresses',
        'applicationNameList' => 'ApplicationNameList',
        'description' => 'Description',
        'destPort' => 'DestPort',
        'destPortGroup' => 'DestPortGroup',
        'destPortType' => 'DestPortType',
        'destination' => 'Destination',
        'destinationType' => 'DestinationType',
        'order' => 'Order',
        'proto' => 'Proto',
        'release' => 'Release',
        'source' => 'Source',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (\is_array($this->applicationNameList)) {
            Model::validateArray($this->applicationNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }

        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationNameList) {
            if (\is_array($this->applicationNameList)) {
                $res['ApplicationNameList'] = [];
                $n1 = 0;
                foreach ($this->applicationNameList as $item1) {
                    $res['ApplicationNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }

        if (null !== $this->destPortGroup) {
            $res['DestPortGroup'] = $this->destPortGroup;
        }

        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }

        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }

        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }

        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1] = addresses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationNameList'])) {
            if (!empty($map['ApplicationNameList'])) {
                $model->applicationNameList = [];
                $n1 = 0;
                foreach ($map['ApplicationNameList'] as $item1) {
                    $model->applicationNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }

        if (isset($map['DestPortGroup'])) {
            $model->destPortGroup = $map['DestPortGroup'];
        }

        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }

        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }

        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
