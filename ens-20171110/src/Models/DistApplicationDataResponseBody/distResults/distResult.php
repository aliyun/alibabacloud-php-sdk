<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponseBody\distResults;

use AlibabaCloud\Tea\Model;

class distResult extends Model
{
    /**
     * @example gcs-prod-websocket-eip-unicom
     *
     * @var string
     */
    public $name;

    /**
     * @example 400
     *
     * @var int
     */
    public $resultCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $resultDescrip;

    /**
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
     * @return distResult
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
