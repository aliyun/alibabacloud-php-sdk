<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body\formdata;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body\urlencoded;

class body extends Model
{
    /**
     * @var formdata
     */
    public $formdata;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $raw;
    /**
     * @var urlencoded
     */
    public $urlencoded;
    protected $_name = [
        'formdata'   => 'Formdata',
        'language'   => 'Language',
        'mode'       => 'Mode',
        'raw'        => 'Raw',
        'urlencoded' => 'Urlencoded',
    ];

    public function validate()
    {
        if (null !== $this->formdata) {
            $this->formdata->validate();
        }
        if (null !== $this->urlencoded) {
            $this->urlencoded->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formdata) {
            $res['Formdata'] = null !== $this->formdata ? $this->formdata->toArray($noStream) : $this->formdata;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->raw) {
            $res['Raw'] = $this->raw;
        }

        if (null !== $this->urlencoded) {
            $res['Urlencoded'] = null !== $this->urlencoded ? $this->urlencoded->toArray($noStream) : $this->urlencoded;
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
        if (isset($map['Formdata'])) {
            $model->formdata = formdata::fromMap($map['Formdata']);
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Raw'])) {
            $model->raw = $map['Raw'];
        }

        if (isset($map['Urlencoded'])) {
            $model->urlencoded = urlencoded::fromMap($map['Urlencoded']);
        }

        return $model;
    }
}
