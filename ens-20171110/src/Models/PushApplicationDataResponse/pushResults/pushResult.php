<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse\pushResults;

use AlibabaCloud\Tea\Model;

class pushResult extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $resultDescrip;

    /**
     * @var int
     */
    public $resultCode;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'version'       => 'Version',
        'resultDescrip' => 'ResultDescrip',
        'resultCode'    => 'ResultCode',
        'name'          => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('resultDescrip', $this->resultDescrip, true);
        Model::validateRequired('resultCode', $this->resultCode, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->resultDescrip) {
            $res['ResultDescrip'] = $this->resultDescrip;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ResultDescrip'])) {
            $model->resultDescrip = $map['ResultDescrip'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
