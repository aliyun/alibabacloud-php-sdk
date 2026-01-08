<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponseBody\data;

use AlibabaCloud\Dara\Model;

class cliented extends Model
{
    /**
     * @var string
     */
    public $buttonContent;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'buttonContent' => 'ButtonContent',
        'count' => 'Count',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
