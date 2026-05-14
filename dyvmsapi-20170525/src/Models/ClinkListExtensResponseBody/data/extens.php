<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListExtensResponseBody\data;

use AlibabaCloud\Dara\Model;

class extens extends Model
{
    /**
     * @var int
     */
    public $allow;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $extenNumber;

    /**
     * @var int
     */
    public $isDirect;

    /**
     * @var int
     */
    public $jittBuffer;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'allow' => 'Allow',
        'areaCode' => 'AreaCode',
        'extenNumber' => 'ExtenNumber',
        'isDirect' => 'IsDirect',
        'jittBuffer' => 'JittBuffer',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allow) {
            $res['Allow'] = $this->allow;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->extenNumber) {
            $res['ExtenNumber'] = $this->extenNumber;
        }

        if (null !== $this->isDirect) {
            $res['IsDirect'] = $this->isDirect;
        }

        if (null !== $this->jittBuffer) {
            $res['JittBuffer'] = $this->jittBuffer;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Allow'])) {
            $model->allow = $map['Allow'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['ExtenNumber'])) {
            $model->extenNumber = $map['ExtenNumber'];
        }

        if (isset($map['IsDirect'])) {
            $model->isDirect = $map['IsDirect'];
        }

        if (isset($map['JittBuffer'])) {
            $model->jittBuffer = $map['JittBuffer'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
