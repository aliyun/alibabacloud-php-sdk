<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckRequest;

use AlibabaCloud\Dara\Model;

class harmNoticeCombineParam extends Model
{
    /**
     * @var bool
     */
    public $combine;

    /**
     * @var string
     */
    public $combineMark;

    /**
     * @var string
     */
    public $combineRule;
    protected $_name = [
        'combine' => 'Combine',
        'combineMark' => 'CombineMark',
        'combineRule' => 'CombineRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->combine) {
            $res['Combine'] = $this->combine;
        }

        if (null !== $this->combineMark) {
            $res['CombineMark'] = $this->combineMark;
        }

        if (null !== $this->combineRule) {
            $res['CombineRule'] = $this->combineRule;
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
        if (isset($map['Combine'])) {
            $model->combine = $map['Combine'];
        }

        if (isset($map['CombineMark'])) {
            $model->combineMark = $map['CombineMark'];
        }

        if (isset($map['CombineRule'])) {
            $model->combineRule = $map['CombineRule'];
        }

        return $model;
    }
}
