<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;

class ListUserInventoryEntriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $captureTime;
    /**
     * @var mixed[][]
     */
    public $entries;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $schemaVersion;
    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'captureTime'   => 'CaptureTime',
        'entries'       => 'Entries',
        'instanceId'    => 'InstanceId',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'schemaVersion' => 'SchemaVersion',
        'typeName'      => 'TypeName',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->captureTime) {
            $res['CaptureTime'] = $this->captureTime;
        }

        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['Entries'] = [];
                $n1             = 0;
                foreach ($this->entries as $item1) {
                    if (\is_array($item1)) {
                        $res['Entries'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Entries'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['CaptureTime'])) {
            $model->captureTime = $map['CaptureTime'];
        }

        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n1             = 0;
                foreach ($map['Entries'] as $item1) {
                    if (!empty($item1)) {
                        $model->entries[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->entries[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
