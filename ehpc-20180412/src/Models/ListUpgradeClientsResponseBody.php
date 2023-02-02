<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUpgradeClientsResponseBody\clientRecords;
use AlibabaCloud\Tea\Model;

class ListUpgradeClientsResponseBody extends Model
{
    /**
     * @var clientRecords[]
     */
    public $clientRecords;

    /**
     * @example 1.2.21
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @example 1.2.22
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @example 89A1AC0F-4A6C-4F3D-98F9-BEF9A823****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientRecords'  => 'ClientRecords',
        'currentVersion' => 'CurrentVersion',
        'latestVersion'  => 'LatestVersion',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientRecords) {
            $res['ClientRecords'] = [];
            if (null !== $this->clientRecords && \is_array($this->clientRecords)) {
                $n = 0;
                foreach ($this->clientRecords as $item) {
                    $res['ClientRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUpgradeClientsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientRecords'])) {
            if (!empty($map['ClientRecords'])) {
                $model->clientRecords = [];
                $n                    = 0;
                foreach ($map['ClientRecords'] as $item) {
                    $model->clientRecords[$n++] = null !== $item ? clientRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
