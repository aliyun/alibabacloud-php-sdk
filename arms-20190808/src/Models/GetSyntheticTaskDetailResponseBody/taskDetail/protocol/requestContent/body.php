<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body\formdata;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent\body\urlencoded;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The data content. This parameter is returned when Mode is set to form-data.
     *
     * @var formdata
     */
    public $formdata;

    /**
     * @description The language used when Mode is set to raw. Valid values:
     *
     *   json
     *   xml
     *   javascript
     *   html
     *   text
     *
     * @example xml
     *
     * @var string
     */
    public $language;

    /**
     * @description The type of the content. Valid values:
     *
     *   form-data
     *   x-www-form-urlencoded
     *   raw
     *
     * @example form-data
     *
     * @var string
     */
    public $mode;

    /**
     * @description The data content. This parameter is returned when **Mode** is set to **raw**.
     *
     * @example content
     *
     * @var string
     */
    public $raw;

    /**
     * @description The URL of the body content.
     *
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
