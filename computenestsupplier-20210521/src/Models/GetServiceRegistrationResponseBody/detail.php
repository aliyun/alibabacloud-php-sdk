<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description Whether risk exists.
     *
     * @example true
     *
     * @var bool
     */
    public $atRisk;

    /**
     * @description Whether service is associated with artifact.
     *
     * @example true
     *
     * @var bool
     */
    public $hasRelatedArtifact;

    /**
     * @description The reports.
     *
     * @example { "template1":"https://compute-nest-security-audit-bucket.oss-cn-hangzhou.aliyuncs.com/report" }
     *
     * @var string
     */
    public $reports;

    /**
     * @description The url of template diff file.
     *
     * @example https://compute-nest-template-diff-bucket.oss-cn-hangzhou.aliyuncs.com/service-abc/diff
     *
     * @var string
     */
    public $templateDiffUrl;
    protected $_name = [
        'atRisk'             => 'AtRisk',
        'hasRelatedArtifact' => 'HasRelatedArtifact',
        'reports'            => 'Reports',
        'templateDiffUrl'    => 'TemplateDiffUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atRisk) {
            $res['AtRisk'] = $this->atRisk;
        }
        if (null !== $this->hasRelatedArtifact) {
            $res['HasRelatedArtifact'] = $this->hasRelatedArtifact;
        }
        if (null !== $this->reports) {
            $res['Reports'] = $this->reports;
        }
        if (null !== $this->templateDiffUrl) {
            $res['TemplateDiffUrl'] = $this->templateDiffUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtRisk'])) {
            $model->atRisk = $map['AtRisk'];
        }
        if (isset($map['HasRelatedArtifact'])) {
            $model->hasRelatedArtifact = $map['HasRelatedArtifact'];
        }
        if (isset($map['Reports'])) {
            $model->reports = $map['Reports'];
        }
        if (isset($map['TemplateDiffUrl'])) {
            $model->templateDiffUrl = $map['TemplateDiffUrl'];
        }

        return $model;
    }
}
