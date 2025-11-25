<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendGroupOutputTpsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendGroupOutputTpsResponseBody\data\records;

class data extends Model
{
    /**
     * @var records
     */
    public $records;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $XUnit;

    /**
     * @var string
     */
    public $YUnit;
    protected $_name = [
        'records' => 'Records',
        'title' => 'Title',
        'XUnit' => 'XUnit',
        'YUnit' => 'YUnit',
    ];

    public function validate()
    {
        if (null !== $this->records) {
            $this->records->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->records) {
            $res['Records'] = null !== $this->records ? $this->records->toArray($noStream) : $this->records;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->XUnit) {
            $res['XUnit'] = $this->XUnit;
        }

        if (null !== $this->YUnit) {
            $res['YUnit'] = $this->YUnit;
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
        if (isset($map['Records'])) {
            $model->records = records::fromMap($map['Records']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['XUnit'])) {
            $model->XUnit = $map['XUnit'];
        }

        if (isset($map['YUnit'])) {
            $model->YUnit = $map['YUnit'];
        }

        return $model;
    }
}
