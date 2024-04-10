<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponseBody\data;

use AlibabaCloud\Tea\Model;

class cliented extends Model
{
    /**
     * @description The text on the button.
     *
     * @example Open url
     *
     * @var string
     */
    public $buttonContent;

    /**
     * @description The number of clicks.
     *
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @description The button type.
     *
     * >  Valid values:
     *
     *   url_button
     *
     *   quick_relpy_button
     *
     *   phone_number_button
     *
     * @example quick_reply_button
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'buttonContent' => 'ButtonContent',
        'count'         => 'Count',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buttonContent) {
            $res['ButtonContent'] = $this->buttonContent;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cliented
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ButtonContent'])) {
            $model->buttonContent = $map['ButtonContent'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
