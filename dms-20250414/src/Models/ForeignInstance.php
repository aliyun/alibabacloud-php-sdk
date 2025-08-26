<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ForeignInstance extends Model
{
    /**
     * @var string
     */
    public $dataLinkName;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string[]
     */
    public $properties;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sid;
    protected $_name = [
        'dataLinkName' => 'DataLinkName',
        'host' => 'Host',
        'instanceSource' => 'InstanceSource',
        'instanceType' => 'InstanceType',
        'port' => 'Port',
        'properties' => 'Properties',
        'regionId' => 'RegionId',
        'sid' => 'Sid',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataLinkName) {
            $res['DataLinkName'] = $this->dataLinkName;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
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
        if (isset($map['DataLinkName'])) {
            $model->dataLinkName = $map['DataLinkName'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        return $model;
    }
}
