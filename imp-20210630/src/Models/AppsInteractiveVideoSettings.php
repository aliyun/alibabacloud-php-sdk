<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AppsInteractiveVideoSettings extends Model
{
    /**
     * @var AppsDomain
     */
    public $domain;

    /**
     * @var AppsSecurity
     */
    public $severity;

    /**
     * @var AppsTranscoding
     */
    public $transcoding;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domain'      => 'Domain',
        'severity'    => 'Severity',
        'transcoding' => 'Transcoding',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = null !== $this->domain ? $this->domain->toMap() : null;
        }
        if (null !== $this->severity) {
            $res['Severity'] = null !== $this->severity ? $this->severity->toMap() : null;
        }
        if (null !== $this->transcoding) {
            $res['Transcoding'] = null !== $this->transcoding ? $this->transcoding->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppsInteractiveVideoSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = AppsDomain::fromMap($map['Domain']);
        }
        if (isset($map['Severity'])) {
            $model->severity = AppsSecurity::fromMap($map['Severity']);
        }
        if (isset($map['Transcoding'])) {
            $model->transcoding = AppsTranscoding::fromMap($map['Transcoding']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
