<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyFailStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyFailStatisticsResponseBody\resultObject\column;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyFailStatisticsResponseBody\resultObject\line;

class resultObject extends Model
{
    /**
     * @var column
     */
    public $column;

    /**
     * @var line
     */
    public $line;
    protected $_name = [
        'column' => 'Column',
        'line' => 'Line',
    ];

    public function validate()
    {
        if (null !== $this->column) {
            $this->column->validate();
        }
        if (null !== $this->line) {
            $this->line->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = null !== $this->column ? $this->column->toArray($noStream) : $this->column;
        }

        if (null !== $this->line) {
            $res['Line'] = null !== $this->line ? $this->line->toArray($noStream) : $this->line;
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
        if (isset($map['Column'])) {
            $model->column = column::fromMap($map['Column']);
        }

        if (isset($map['Line'])) {
            $model->line = line::fromMap($map['Line']);
        }

        return $model;
    }
}
