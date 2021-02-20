<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserAttackSurfaceRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int[]
     */
    public $records;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'source'   => 'Source',
        'records'  => 'Records',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->records) {
            $res['Records'] = $this->records;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserAttackSurfaceRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = $map['Records'];
            }
        }

        return $model;
    }
}
