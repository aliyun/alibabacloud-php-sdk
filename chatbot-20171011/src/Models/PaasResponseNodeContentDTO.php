<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasResponseNodeContentDTO extends Model
{
    /**
     * @description Type
     *
     * @var string
     */
    public $type;

    /**
     * @description Text
     *
     * @var string
     */
    public $text;

    /**
     * @description Image
     *
     * @var string
     */
    public $image;

    /**
     * @description ButtonList
     *
     * @var PaasButtonListDTO
     */
    public $buttonList;
    protected $_name = [
        'type'       => 'Type',
        'text'       => 'Text',
        'image'      => 'Image',
        'buttonList' => 'ButtonList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->buttonList) {
            $res['ButtonList'] = null !== $this->buttonList ? $this->buttonList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasResponseNodeContentDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ButtonList'])) {
            $model->buttonList = PaasButtonListDTO::fromMap($map['ButtonList']);
        }

        return $model;
    }
}
