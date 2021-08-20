<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class GetCodeCompletionRequest extends Model
{
    /**
     * @var string
     */
    public $fetchKeys;

    /**
     * @var bool
     */
    public $isEncrypted;
    protected $_name = [
        'fetchKeys'   => 'FetchKeys',
        'isEncrypted' => 'IsEncrypted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fetchKeys) {
            $res['FetchKeys'] = $this->fetchKeys;
        }
        if (null !== $this->isEncrypted) {
            $res['IsEncrypted'] = $this->isEncrypted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCodeCompletionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FetchKeys'])) {
            $model->fetchKeys = $map['FetchKeys'];
        }
        if (isset($map['IsEncrypted'])) {
            $model->isEncrypted = $map['IsEncrypted'];
        }

        return $model;
    }
}
