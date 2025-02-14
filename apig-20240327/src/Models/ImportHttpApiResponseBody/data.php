<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo;

class data extends Model
{
    /**
     * @var dryRunInfo
     */
    public $dryRunInfo;
    /**
     * @var string
     */
    public $httpApiId;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'dryRunInfo' => 'dryRunInfo',
        'httpApiId'  => 'httpApiId',
        'name'       => 'name',
    ];

    public function validate()
    {
        if (null !== $this->dryRunInfo) {
            $this->dryRunInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRunInfo) {
            $res['dryRunInfo'] = null !== $this->dryRunInfo ? $this->dryRunInfo->toArray($noStream) : $this->dryRunInfo;
        }

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['dryRunInfo'])) {
            $model->dryRunInfo = dryRunInfo::fromMap($map['dryRunInfo']);
        }

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
