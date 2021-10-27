<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody\precheckBackupResult\list_;
use AlibabaCloud\Tea\Model;

class precheckBackupResult extends Model
{
    /**
     * @var list_
     */
    public $list;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'list'   => 'List',
        'result' => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precheckBackupResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
