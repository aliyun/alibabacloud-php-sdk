<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnAclFieldsResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The rules and policies that were configured. The JSON string must be decoded.
     *
     * @example \"fieldList\":[{\"name\":\"alert\",\"display\":\"observe\",\"tip\":\"mark the request in the log without blocking it\"},{\"name\":\"bypass\",\"display\":\"bypass\",\"tip\":\"bypass security modules\"}],\"module\":[{\"name\":\"cc\",\"display\":\"Rate Limit\",\"tip\":\"bypass Rate Limit\"},{\"name\":\"bot\",\"display\":\"Bot Traffic Management\",\"tip\":\"bypass Bot Manager\"}]
     *
     * @var string
     */
    public $fields;
    protected $_name = [
        'fields' => 'Fields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }

        return $model;
    }
}
