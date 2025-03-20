<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteVodTemplateRequest extends Model
{
    /**
     * @description The ID of the snapshot template.
     *
     * This parameter is required.
     *
     * @example f5b228fe6930e*****d6bf55bd87789
     *
     * @var string
     */
    public $vodTemplateId;
    protected $_name = [
        'vodTemplateId' => 'VodTemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vodTemplateId) {
            $res['VodTemplateId'] = $this->vodTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVodTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VodTemplateId'])) {
            $model->vodTemplateId = $map['VodTemplateId'];
        }

        return $model;
    }
}
