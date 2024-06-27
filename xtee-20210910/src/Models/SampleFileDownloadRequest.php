<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class SampleFileDownloadRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $tab;
    protected $_name = [
        'lang'  => 'Lang',
        'regId' => 'RegId',
        'tab'   => 'Tab',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }
        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SampleFileDownloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }
        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        return $model;
    }
}
