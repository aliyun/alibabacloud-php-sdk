<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody;

use AlibabaCloud\Tea\Model;

class mediaAuditResult extends Model
{
    /**
     * @var string
     */
    public $abnormalModules;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'label'           => 'Label',
        'suggestion'      => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalModules) {
            $res['AbnormalModules'] = $this->abnormalModules;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaAuditResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalModules'])) {
            $model->abnormalModules = $map['AbnormalModules'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
