<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeNamespaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string[]
     */
    public $namespaceInfo;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'message'       => 'Message',
        'namespace'     => 'Namespace',
        'namespaceInfo' => 'NamespaceInfo',
        'regionId'      => 'RegionId',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceInfo)) {
            Model::validateArray($this->namespaceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespaceInfo) {
            if (\is_array($this->namespaceInfo)) {
                $res['NamespaceInfo'] = [];
                foreach ($this->namespaceInfo as $key1 => $value1) {
                    $res['NamespaceInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespaceInfo'])) {
            if (!empty($map['NamespaceInfo'])) {
                $model->namespaceInfo = [];
                foreach ($map['NamespaceInfo'] as $key1 => $value1) {
                    $model->namespaceInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
