<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUpgradeClientsResponseBody\clientRecords;

class ListUpgradeClientsResponseBody extends Model
{
    /**
     * @var clientRecords[]
     */
    public $clientRecords;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientRecords' => 'ClientRecords',
        'currentVersion' => 'CurrentVersion',
        'latestVersion' => 'LatestVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clientRecords)) {
            Model::validateArray($this->clientRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientRecords) {
            if (\is_array($this->clientRecords)) {
                $res['ClientRecords'] = [];
                $n1 = 0;
                foreach ($this->clientRecords as $item1) {
                    $res['ClientRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientRecords'])) {
            if (!empty($map['ClientRecords'])) {
                $model->clientRecords = [];
                $n1 = 0;
                foreach ($map['ClientRecords'] as $item1) {
                    $model->clientRecords[$n1++] = clientRecords::fromMap($item1);
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
