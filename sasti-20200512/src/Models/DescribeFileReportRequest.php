<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models;

use AlibabaCloud\Tea\Model;

class DescribeFileReportRequest extends Model
{
    /**
     * @example ThreatTypes,Intelligences,AttackPreferenceTop5,AttackCntByThreatType
     *
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $fileHash;

    /**
     * @var string
     */
    public $serviceLang;
    protected $_name = [
        'field'       => 'Field',
        'fileHash'    => 'FileHash',
        'serviceLang' => 'ServiceLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->serviceLang) {
            $res['ServiceLang'] = $this->serviceLang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFileReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['ServiceLang'])) {
            $model->serviceLang = $map['ServiceLang'];
        }

        return $model;
    }
}
