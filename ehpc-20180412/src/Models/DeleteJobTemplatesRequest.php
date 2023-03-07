<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DeleteJobTemplatesRequest extends Model
{
    /**
     * @description The list of job templates. A maximum of 20 job templates can be deleted.
     *
     * Format: `[{"Id": "0.sched****"},{"Id": "1.sched****"}]`. Separate multiple job templates with commas (,).
     *
     * You can call the [ListJobTemplates](~~87248~~) operation to obtain the job template ID.
     * @example [{"Id":"ehpc-job-tmpl-6RVcMK****"},{"Id": "ehpc-job-tmpl-6RxO5y****"}]
     *
     * @var string
     */
    public $templates;
    protected $_name = [
        'templates' => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteJobTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }

        return $model;
    }
}
