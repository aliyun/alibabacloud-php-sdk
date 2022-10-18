<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data;

use AlibabaCloud\Tea\Model;

class dialog extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'content' => 'Content',
        'schema'  => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
