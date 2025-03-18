<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNotifyTemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Dear $aliyunUID : Cloud Security Center Threat Analysis and Response has detected a newly discovered security incident $incidentName(Incident id :$incidentID) in $startTime, Please go to Cloud Security Center Console View.
     *
     * @var string
     */
    public $content;

    /**
     * @example yundun_soar_incident_generate
     *
     * @var string
     */
    public $eventId;

    /**
     * @example [\\"aliyunUID\\",\\"incidentName\\",\\"incidentID\\",\\"startTime\\"]
     *
     * @var string
     */
    public $params;

    /**
     * @example [Alibaba Cloud Threat Analysis and Response] has detected a newly discovered security incident $incidentName($incidentID)
     *
     * @var string
     */
    public $subject;

    /**
     * @example incident generate
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'content' => 'Content',
        'eventId' => 'EventId',
        'params' => 'Params',
        'subject' => 'Subject',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
