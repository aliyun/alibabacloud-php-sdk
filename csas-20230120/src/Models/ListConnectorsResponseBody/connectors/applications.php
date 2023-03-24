<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example application_name
     *
     * @var string
     */
    public $applicationName;
    protected $_name = [
        'applicationId'   => 'ApplicationId',
        'applicationName' => 'ApplicationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        return $model;
    }
}
