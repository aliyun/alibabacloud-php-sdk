<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class RollbackSuspEventQuaraFileRequest extends Model
{
    /**
     * @var string
     */
    public $from;
    /**
     * @var int
     */
    public $quaraFileId;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'from'        => 'From',
        'quaraFileId' => 'QuaraFileId',
        'sourceIp'    => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->quaraFileId) {
            $res['QuaraFileId'] = $this->quaraFileId;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['QuaraFileId'])) {
            $model->quaraFileId = $map['QuaraFileId'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
