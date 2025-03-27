<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphResponseBody;

use AlibabaCloud\Dara\Model;

class responseCodes extends Model
{
    /**
     * @var int
     */
    public $code302Pv;

    /**
     * @var int
     */
    public $code405Pv;

    /**
     * @var int
     */
    public $code444Pv;

    /**
     * @var int
     */
    public $code499Pv;

    /**
     * @var int
     */
    public $code5xxPv;

    /**
     * @var int
     */
    public $index;
    protected $_name = [
        'code302Pv' => '302Pv',
        'code405Pv' => '405Pv',
        'code444Pv' => '444Pv',
        'code499Pv' => '499Pv',
        'code5xxPv' => '5xxPv',
        'index' => 'Index',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code302Pv) {
            $res['302Pv'] = $this->code302Pv;
        }

        if (null !== $this->code405Pv) {
            $res['405Pv'] = $this->code405Pv;
        }

        if (null !== $this->code444Pv) {
            $res['444Pv'] = $this->code444Pv;
        }

        if (null !== $this->code499Pv) {
            $res['499Pv'] = $this->code499Pv;
        }

        if (null !== $this->code5xxPv) {
            $res['5xxPv'] = $this->code5xxPv;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
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
        if (isset($map['302Pv'])) {
            $model->code302Pv = $map['302Pv'];
        }

        if (isset($map['405Pv'])) {
            $model->code405Pv = $map['405Pv'];
        }

        if (isset($map['444Pv'])) {
            $model->code444Pv = $map['444Pv'];
        }

        if (isset($map['499Pv'])) {
            $model->code499Pv = $map['499Pv'];
        }

        if (isset($map['5xxPv'])) {
            $model->code5xxPv = $map['5xxPv'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}
