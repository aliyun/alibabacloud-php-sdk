<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var bool
     */
    public $atRisk;
    /**
     * @var bool
     */
    public $hasRelatedArtifact;
    /**
     * @var string
     */
    public $reports;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
