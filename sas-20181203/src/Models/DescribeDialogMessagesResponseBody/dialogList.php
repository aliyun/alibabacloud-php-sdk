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
     * @var string
     */
    public $params;

    /**
     * @var int
     */
    public $ID;
    protected $_name = [
        'dialogKey' => 'DialogKey',
        'params'    => 'Params',
        'ID'        => 'ID',
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
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
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
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }

        return $model;
    }
}
