<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body\formdata;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body\urlencoded;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var formdata
     */
    public $formdata;

    /**
     * @example xml
     *
     * @var string
     */
    public $language;

    /**
     * @example form-data
     *
     * @var string
     */
    public $mode;

    /**
     * @example content
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formdata) {
            $res['Formdata'] = null !== $this->formdata ? $this->formdata->toMap() : null;
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
            $res['Urlencoded'] = null !== $this->urlencoded ? $this->urlencoded->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
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
