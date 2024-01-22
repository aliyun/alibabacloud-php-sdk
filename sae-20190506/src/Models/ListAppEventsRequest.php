<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListAppEventsRequest extends Model
{
    /**
     * @description The application ID.
     *
     * @example f7730764-d88f-4b9a-8d8e-cd8efbfe****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the event. Valid values:
     *
     *   **Warning**: an alert.
     *   **Normal**: a normal event.
     *
     * @example Warning
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The namespace ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The type of the object. Valid values:
     *
     *   **Deployment**: an application.
     *   **Pod**: an application instance.
     *   **Service**: a Server Load Balancer (SLB) instance.
     *   **HorizontalPodAutoscaler**: an auto scaling policy.
     *   **CloneSet**: an application.
     *
     * @example Pod
     *
     * @var string
     */
    public $objectKind;

    /**
     * @description The name of the object. Fuzzy search by prefix is supported.
     *
     * @example errew-b86bf540-b4dc-47d8-a42f-b4997c14bd8f-5595cbddd6-x****
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The number of entries to return on each page. Valid values: 0 to 10000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The cause of the event. Fuzzy search by prefix is supported.
     *
     * @example Started
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'appId'       => 'AppId',
        'currentPage' => 'CurrentPage',
        'eventType'   => 'EventType',
        'namespace'   => 'Namespace',
        'objectKind'  => 'ObjectKind',
        'objectName'  => 'ObjectName',
        'pageSize'    => 'PageSize',
        'reason'      => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->objectKind) {
            $res['ObjectKind'] = $this->objectKind;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ObjectKind'])) {
            $model->objectKind = $map['ObjectKind'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
