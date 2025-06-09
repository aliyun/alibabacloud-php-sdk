<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsSQLErrorLogResponseBody;

use AlibabaCloud\Dara\Model;

class logList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $linenum;
    protected $_name = [
        'content' => 'Content',
        'linenum' => 'Linenum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->linenum) {
            $res['Linenum'] = $this->linenum;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Linenum'])) {
            $model->linenum = $map['Linenum'];
        }

        return $model;
    }
}
