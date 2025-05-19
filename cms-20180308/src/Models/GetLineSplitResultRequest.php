<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class GetLineSplitResultRequest extends Model
{
    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var string
     */
    public $selectContent;

    /**
     * @var string
     */
    public $splitType;
    protected $_name = [
        'line' => 'Line',
        'prefix' => 'Prefix',
        'regex' => 'Regex',
        'selectContent' => 'SelectContent',
        'splitType' => 'SplitType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        if (null !== $this->selectContent) {
            $res['SelectContent'] = $this->selectContent;
        }

        if (null !== $this->splitType) {
            $res['SplitType'] = $this->splitType;
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
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        if (isset($map['SelectContent'])) {
            $model->selectContent = $map['SelectContent'];
        }

        if (isset($map['SplitType'])) {
            $model->splitType = $map['SplitType'];
        }

        return $model;
    }
}
