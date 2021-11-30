<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchResponseBody\resourcesToImport;
use AlibabaCloud\Tea\Model;

class GenerateTemplateByScratchResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcesToImport[]
     */
    public $resourcesToImport;

    /**
     * @var string
     */
    public $templateBody;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourcesToImport' => 'ResourcesToImport',
        'templateBody'      => 'TemplateBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourcesToImport) {
            $res['ResourcesToImport'] = [];
            if (null !== $this->resourcesToImport && \is_array($this->resourcesToImport)) {
                $n = 0;
                foreach ($this->resourcesToImport as $item) {
                    $res['ResourcesToImport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateTemplateByScratchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcesToImport'])) {
            if (!empty($map['ResourcesToImport'])) {
                $model->resourcesToImport = [];
                $n                        = 0;
                foreach ($map['ResourcesToImport'] as $item) {
                    $model->resourcesToImport[$n++] = null !== $item ? resourcesToImport::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        return $model;
    }
}
