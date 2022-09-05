<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentRequest\ad;

use AlibabaCloud\Tea\Model;

class nativead extends Model
{
    /**
     * @var string
     */
    public $attrname;

    /**
     * @var string
     */
    public $attrvalue;

    /**
     * @var int
     */
    public $h;

    /**
     * @var string
     */
    public $mime;

    /**
     * @var int
     */
    public $w;
    protected $_name = [
        'attrname'  => 'Attrname',
        'attrvalue' => 'Attrvalue',
        'h'         => 'H',
        'mime'      => 'Mime',
        'w'         => 'W',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attrname) {
            $res['Attrname'] = $this->attrname;
        }
        if (null !== $this->attrvalue) {
            $res['Attrvalue'] = $this->attrvalue;
        }
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->mime) {
            $res['Mime'] = $this->mime;
        }
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nativead
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attrname'])) {
            $model->attrname = $map['Attrname'];
        }
        if (isset($map['Attrvalue'])) {
            $model->attrvalue = $map['Attrvalue'];
        }
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['Mime'])) {
            $model->mime = $map['Mime'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }

        return $model;
    }
}
