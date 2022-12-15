<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieOpenStatusDetail\apiList;

use AlibabaCloud\Tea\Model;

class moreOperations extends Model
{
    /**
     * @var string
     */
    public $clickUrl;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'clickUrl'  => 'ClickUrl',
        'operation' => 'Operation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clickUrl) {
            $res['ClickUrl'] = $this->clickUrl;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moreOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClickUrl'])) {
            $model->clickUrl = $map['ClickUrl'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
