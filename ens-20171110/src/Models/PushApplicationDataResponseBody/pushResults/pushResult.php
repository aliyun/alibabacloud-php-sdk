<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponseBody\pushResults;

use AlibabaCloud\Tea\Model;

class pushResult extends Model
{
    /**
     * @description The name of the data file.
     *
     * @example gcs-pre-websocket-eip-telecom
     *
     * @var string
     */
    public $name;

    /**
     * @description The push result. The value is of the enumeration type. Valid values:
     *
     *   0: The push operation is successful.
     *   100: The push operation has been performed and the file is pushed.
     *   200: The push operation has been performed and the file is being pushed to specific file servers.
     *   300: The push operation failed. You must trigger the push operation again. The ResultDescrip parameter indicates the error description.
     *
     * @example 100
     *
     * @var int
     */
    public $resultCode;

    /**
     * @description The description of the push status.
     *
     * @var string
     */
    public $resultDescrip;

    /**
     * @description The version number of the data file.
     *
     * @example standard
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'          => 'Name',
        'resultCode'    => 'ResultCode',
        'resultDescrip' => 'ResultDescrip',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultDescrip) {
            $res['ResultDescrip'] = $this->resultDescrip;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultDescrip'])) {
            $model->resultDescrip = $map['ResultDescrip'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
