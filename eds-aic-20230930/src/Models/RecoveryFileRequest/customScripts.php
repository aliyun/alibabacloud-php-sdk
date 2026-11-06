<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileRequest;

use AlibabaCloud\Dara\Model;

class customScripts extends Model
{
    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossObjectKey;

    /**
     * @var string
     */
    public $ossRegion;

    /**
     * @var string[]
     */
    public $testInstanceIds;
    protected $_name = [
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObjectKey' => 'OssObjectKey',
        'ossRegion' => 'OssRegion',
        'testInstanceIds' => 'TestInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->testInstanceIds)) {
            Model::validateArray($this->testInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        if (null !== $this->ossObjectKey) {
            $res['OssObjectKey'] = $this->ossObjectKey;
        }

        if (null !== $this->ossRegion) {
            $res['OssRegion'] = $this->ossRegion;
        }

        if (null !== $this->testInstanceIds) {
            if (\is_array($this->testInstanceIds)) {
                $res['TestInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->testInstanceIds as $item1) {
                    $res['TestInstanceIds'][$n1] = $item1;
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
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        if (isset($map['OssObjectKey'])) {
            $model->ossObjectKey = $map['OssObjectKey'];
        }

        if (isset($map['OssRegion'])) {
            $model->ossRegion = $map['OssRegion'];
        }

        if (isset($map['TestInstanceIds'])) {
            if (!empty($map['TestInstanceIds'])) {
                $model->testInstanceIds = [];
                $n1 = 0;
                foreach ($map['TestInstanceIds'] as $item1) {
                    $model->testInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
