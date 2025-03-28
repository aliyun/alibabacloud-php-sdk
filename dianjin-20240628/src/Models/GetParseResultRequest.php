<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class GetParseResultRequest extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var bool
     */
    public $useUrlResult;
    protected $_name = [
        'docId' => 'docId',
        'libraryId' => 'libraryId',
        'useUrlResult' => 'useUrlResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->useUrlResult) {
            $res['useUrlResult'] = $this->useUrlResult;
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
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['useUrlResult'])) {
            $model->useUrlResult = $map['useUrlResult'];
        }

        return $model;
    }
}
