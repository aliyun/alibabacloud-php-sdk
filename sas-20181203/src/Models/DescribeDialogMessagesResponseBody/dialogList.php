<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDialogMessagesResponseBody;

use AlibabaCloud\Tea\Model;

class dialogList extends Model
{
    /**
     * @var string
     */
    public $dialogKey;

    /**
     * @var int
     */
    public $ID;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'dialogKey' => 'DialogKey',
        'ID'        => 'ID',
        'params'    => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogKey) {
            $res['DialogKey'] = $this->dialogKey;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogKey'])) {
            $model->dialogKey = $map['DialogKey'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
