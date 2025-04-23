<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRamPolicyExportTaskVersionResponseBody\ramPolicyExportTaskVersion;

class GetRamPolicyExportTaskVersionResponseBody extends Model
{
    /**
     * @var ramPolicyExportTaskVersion
     */
    public $ramPolicyExportTaskVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ramPolicyExportTaskVersion' => 'ramPolicyExportTaskVersion',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->ramPolicyExportTaskVersion) {
            $this->ramPolicyExportTaskVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ramPolicyExportTaskVersion) {
            $res['ramPolicyExportTaskVersion'] = null !== $this->ramPolicyExportTaskVersion ? $this->ramPolicyExportTaskVersion->toArray($noStream) : $this->ramPolicyExportTaskVersion;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['ramPolicyExportTaskVersion'])) {
            $model->ramPolicyExportTaskVersion = ramPolicyExportTaskVersion::fromMap($map['ramPolicyExportTaskVersion']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
