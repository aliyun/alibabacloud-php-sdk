<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineRunRequest extends Model
{
    /**
     * @example Raw
     *
     * @var string
     */
    public $manifestType;

    /**
     * @var string
     */
    public $tokenId;

    /**
     * @example false
     *
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'manifestType' => 'ManifestType',
        'tokenId'      => 'TokenId',
        'verbose'      => 'Verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manifestType) {
            $res['ManifestType'] = $this->manifestType;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManifestType'])) {
            $model->manifestType = $map['ManifestType'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
