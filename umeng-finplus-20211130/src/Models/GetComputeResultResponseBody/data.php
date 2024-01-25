<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetComputeResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bcId;

    /**
     * @var int
     */
    public $billedNum;

    /**
     * @var int
     */
    public $code10000Num;

    /**
     * @var int
     */
    public $code108Num;

    /**
     * @var int
     */
    public $code109Num;

    /**
     * @var string
     */
    public $exportFileName;

    /**
     * @var int
     */
    public $fileLineNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'bcId'           => 'bcId',
        'billedNum'      => 'billedNum',
        'code10000Num'   => 'code10000Num',
        'code108Num'     => 'code108Num',
        'code109Num'     => 'code109Num',
        'exportFileName' => 'exportFileName',
        'fileLineNumber' => 'fileLineNumber',
        'name'           => 'name',
        'password'       => 'password',
        'state'          => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bcId) {
            $res['bcId'] = $this->bcId;
        }
        if (null !== $this->billedNum) {
            $res['billedNum'] = $this->billedNum;
        }
        if (null !== $this->code10000Num) {
            $res['code10000Num'] = $this->code10000Num;
        }
        if (null !== $this->code108Num) {
            $res['code108Num'] = $this->code108Num;
        }
        if (null !== $this->code109Num) {
            $res['code109Num'] = $this->code109Num;
        }
        if (null !== $this->exportFileName) {
            $res['exportFileName'] = $this->exportFileName;
        }
        if (null !== $this->fileLineNumber) {
            $res['fileLineNumber'] = $this->fileLineNumber;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bcId'])) {
            $model->bcId = $map['bcId'];
        }
        if (isset($map['billedNum'])) {
            $model->billedNum = $map['billedNum'];
        }
        if (isset($map['code10000Num'])) {
            $model->code10000Num = $map['code10000Num'];
        }
        if (isset($map['code108Num'])) {
            $model->code108Num = $map['code108Num'];
        }
        if (isset($map['code109Num'])) {
            $model->code109Num = $map['code109Num'];
        }
        if (isset($map['exportFileName'])) {
            $model->exportFileName = $map['exportFileName'];
        }
        if (isset($map['fileLineNumber'])) {
            $model->fileLineNumber = $map['fileLineNumber'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
