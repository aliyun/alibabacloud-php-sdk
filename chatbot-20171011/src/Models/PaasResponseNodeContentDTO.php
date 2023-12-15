<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasResponseNodeContentDTO extends Model
{
    /**
     * @var PaasButtonListDTO
     */
    public $buttonList;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'buttonList' => 'ButtonList',
        'image'      => 'Image',
        'text'       => 'Text',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buttonList) {
            $res['ButtonList'] = null !== $this->buttonList ? $this->buttonList->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ButtonList'])) {
            $model->buttonList = PaasButtonListDTO::fromMap($map['ButtonList']);
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
