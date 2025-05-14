<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations;

use AlibabaCloud\Dara\Model;

class links extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'link' => 'Link',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
