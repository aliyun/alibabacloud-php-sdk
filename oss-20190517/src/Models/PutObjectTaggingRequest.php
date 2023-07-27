<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutObjectTaggingRequest extends Model
{
    /**
     * @var Tagging
     */
    public $tagging;

    /**
     * @example CAEQNRiBgMClj7qD0BYiIDQ5Y2QyMjc3NGZkODRlMTU5M2VkY2U3MWRiNGRh****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'tagging'   => 'Tagging',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagging) {
            $res['Tagging'] = null !== $this->tagging ? $this->tagging->toMap() : null;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutObjectTaggingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tagging'])) {
            $model->tagging = Tagging::fromMap($map['Tagging']);
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
